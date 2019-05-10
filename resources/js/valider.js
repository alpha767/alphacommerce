$(document).ready(function () {
    var $message = $("#message");
    $message.hide();
    var $form = $('#signup-form');

    braintree.setup(
        'sandbox_nx8s4bc8_vtmqcqv85fcdyh5x',
        'dropin',
        {
            container: 'dropin-container',
            paypal: {
                button: {
                    type: 'checkout'
                }
            },
            form: 'signup-form',
            onPaymentMethodReceived: function (payload) {
                console.log("Payement methodrRecieved payload: ", payload);
                $message.show();
                $message.html("nonce: " + payload.nonce + "<br/>" +
                    "cardType: " + payload.details.cardType + "<br/>" +
                    "lastFour: " + payload.details.lastFour + "<br/>"
                );
                $form.submit();
            },
            onError: function (error) {
                console.error(error.type + ' Error: ', error);
            }
        });

    $form.submit(function( event ) {
        event.preventDefault();
        return tokenize();
    });


});
