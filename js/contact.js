  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nom: {
                validators: {
                        stringLength: {
                        min: 2,
                        message: 'Entrez votre nom'
                    },
                        notEmpty: {
                        message: 'Entrez votre nom !'
                    }
                }
            },
             prenom: {
                validators: {
                     stringLength: {
                        min: 2,
                        message: 'Entrez votre prénom'
                    },
                    notEmpty: {
                        message: 'Entrez votre prénom !'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Entrez votre adresse électonique'
                    },
                    emailAddress: {
                        message: 'Indiquez une adresse électonique valide !'
                    }
                }
            },
            tel: {
                validators: {
                    notEmpty: {
                        message: 'Entrez votre numéro de téléphone'
                    },
                    phone: {
                        country: 'FR',
                        message: 'Indiquez un numéro de téléphone valide !'
                    }
                }
            },
            adresse: {
                validators: {
                     stringLength: {
                        min: 8,
                        message: 'Entrez votre adresse postale'
                    },
                    notEmpty: {
                        message: 'Entrez votre adresse postale !'
                    }
                }
            },
            ville: {
                validators: {
                     stringLength: {
                        min: 4,
                        message: 'Entrez le nom de votre ville'
                    },
                    notEmpty: {
                        message: 'Entrez le nom de votre ville !'
                    }
                }
            },
            
            codepostal: {
                validators: {
                    notEmpty: {
                        message: 'Entrez le code postal de votre ville'
                    },
                    zipCode: {
                        country: 'FR',
                        message: 'Indiquez un code postal valide !'
                    }
                }
            },
            question: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'La question doit contenir entre 10 et 200 caractères'
                    },
                    notEmpty: {
                        message: 'Quelle est votre demande ?'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});