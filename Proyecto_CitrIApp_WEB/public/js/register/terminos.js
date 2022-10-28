(async () => {
    const {value: accept} = await Swal.fire({
        title: 'Terminos y condiciones',
        input: 'checkbox',
        inputValue: 1,
        inputPlaceholder: 'Acepto los terminos y condiciones',
        confirmButtonText: 'Confirmar <i class="fa fa-arrow-right"></i>',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        stopKeydownPropagation: false,
        backdrop: `rgba(0,0,0,0.8) url("/images/nyan-cat.gif") left top no-repeat`,
     
        color: '#black',
        confirmButtonColor: '#44b844',
        inputValidator: (result) => {
            return !result && 'Necesitas agragar los Terminos y Condiciones'
        }
    });

    if (accept) {
        Swal.fire({title: 'Aceptaste los terminos y condiciones :()',
        backdrop: `rgba(0,0,0,0.8) url("/images/nyan-cat.gif") left top no-repeat`,
        color: '#black',
        confirmButtonColor: '#44b844'
    })
};
})()