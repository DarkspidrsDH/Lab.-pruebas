//console.log("Main")

export async function Get(ruta){
    return new Promise((resolve, reject) => {
        axios.get(ruta)
        .then(response => {
            resolve (response)
        })
        .catch(error => {
            reject (error)
        });
    })
}


export async function Post(url,body){ // ESTRUCTURA - POST
    return new Promise((resolve, reject) => {
        axios.post(url,body)
        .then(response => {
            resolve (response)
        })
        .catch(error => {
            reject (error)
        });
    })
}


export async function Patch(url,body){ // ESTRUCTURA - PATCH
    return new Promise((resolve, reject) => {
        axios.patch(url,body)
        .then(response => {
            resolve (response)
        })
        .catch(error => {
            reject (error)
        });
    })
}

export async function Delete(ruta){ // ESTRUCTURA - GET
    return new Promise((resolve, reject) => {
        axios.delete(ruta)
        .then(response => {
            resolve (response)
        })
        .catch(error => {
            reject (error)
        });
    })
}






function Try() {
    let ruta = '/public'
    //let ruta = '/pruebas'
    axios.get(ruta)
        .then(response => {
            console.log(response.data);
        })
        .catch(error => {
            console.error('Hubo un error!', error);
        });
}

//Try();

