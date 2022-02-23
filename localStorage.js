function getApi(param) {

    var local = localStorage.getItem(param);
    //Se existir localStorage do cep indicado, consome através dele.
    if (local) {
        console.log(JSON.parse(local));
        console.log('A api foi consumida por localStorage e reduziu o consumo de dados e processamento.')
    } else {
        //Se não existir localStorage, consome normalmente cria um localstorage.
        fetch('https://viacep.com.br/ws/' + param + '/json/')
            .then(response => response.json())
            .then(function (e) {
                localStorage.setItem(param, JSON.stringify(e))
                console.log(e);
                console.log('A api foi consumida e foi gerado um cookie para armazenar este cep.')

            })
            .catch(err => console.log(err));

    }
}

getApi('41920470');