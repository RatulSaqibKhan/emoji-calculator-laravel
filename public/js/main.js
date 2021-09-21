$(function() {
  const calculatorForm = $('#calculatorForm');
  const input1Field = $('[name="input1"]');
  const operandField = $('[name="operand"]');
  const input2Field = $('[name="input2"]');
  const resultField = $('[name="result"]');
  const csrfToken = $('meta[name="csrf-token"]').attr('content')
  let validationPass = true

  function checkForInputValidation(inputField, value) {
    inputField.removeClass("error")
    validationPass = true
    if (isNaN(value)) {
      inputField.addClass("error")
      validationPass = false
    }
  }

  input1Field.keyup(function(){
    let value = Number($(this).val());
    checkForInputValidation(input1Field, value)
  })

  input2Field.keyup(function(){
    let value = Number($(this).val());
    checkForInputValidation(input2Field, value)
  })

  operandField.change(function(){
    let value = $(this).val();
    operandField.removeClass("error")
    validationPass = true
    if (!value) {
      operandField.addClass("error")
      validationPass = false
    }
  })

  calculatorForm.submit(function(e) {
    e.preventDefault()
    resultField.val('')
    let form = $(this)
    let url  = form.attr('action')
    let type = form.attr('method')
    let data = {
      '_token' : csrfToken,
      'input1' : input1Field.val(),
      'operand': operandField.val(),
      'input2' : input2Field.val(),
    }
    if (validationPass) {
      $.ajax({
        url: url,
        type: type,
        data: data,
      }).done(function(response) {
        resultField.val(response.result)
      }).fail(function(response) {
        if (response.status === 422) { //validation error
          $.each(response.responseJSON.errors, function (errorIndex, errorValue) {
            $('[name="'+errorIndex+'"]').addClass("error");
          });
        } else {
          alert("Something went wrong!")
        }
      })

    }
  })
})