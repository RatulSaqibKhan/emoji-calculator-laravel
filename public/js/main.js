$(function() {
  const calculatorForm = $('#calculatorForm');
  const input1Field = $('[name="input1"]');
  const operandField = $('[name="operand"]');
  const input2Field = $('[name="input2"]');
  const resultField = $('[name="result"]');
  const buttonField = $('button');
  const csrfToken = $('meta[name="csrf-token"]').attr('content')
  let validationPass = true

  /**
   * Check if the given input is valid to caculate
   */
  function checkForInputValidation(inputField, value) {
    inputField.removeClass("error")
    validationPass = true
    if (isNaN(value)) {
      inputField.addClass("error")
      validationPass = false
    }
  }

  /**
   * Check keyup event for input1Field
   */
  input1Field.keyup(function(){
    let value = Number($(this).val());
    checkForInputValidation(input1Field, value)
  })

  /**
   * Check keyup event for input2Field
   */
  input2Field.keyup(function(){
    let value = Number($(this).val());
    checkForInputValidation(input2Field, value)
  })

  /**
   * Check keyup event for operandField
   */
  operandField.change(function(){
    let value = $(this).val();
    let acceptableValues = ['addition', 'subtraction', 'multiplication', 'division']
    operandField.removeClass("error")
    validationPass = true
    if (!value || !acceptableValues.includes(value)) {
      operandField.addClass("error")
      validationPass = false
    }
  })
  /**
   * Calculator Form Submit
   */
  calculatorForm.submit(function(e) {
    e.preventDefault()
    resultField.val('')
    resultField.attr('disabled', 'disabled')
    let form = $(this)
    let url  = form.attr('action')
    let type = form.attr('method')
    let data = {
      '_token' : csrfToken,
      'input1' : input1Field.val(),
      'operand': operandField.val(),
      'input2' : input2Field.val(),
    }
    if (!validationPass) {
      alert("Please give valid input!")
      return false;
    }
    buttonField.attr('disabled', 'disabled')
    $.ajax({
      url: url,
      type: type,
      data: data,
    })
    .done(function(response) {
      resultField.val(response.result)
    })
    .fail(function(response) {
      if (response.status === 422) { //validation error
        $.each(response.responseJSON.errors, function (errorIndex, errorValue) {
          $('[name="'+errorIndex+'"]').addClass("error");
        });
      } else {
        alert("Something went wrong!")
      }
    })
    .always(function() {
      buttonField.removeAttr('disabled')
    })

  })
})