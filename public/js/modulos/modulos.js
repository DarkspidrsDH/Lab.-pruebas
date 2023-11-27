export async function peticiones(){
    async function Get(ruta){
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
    async function Post(url,body){ // ESTRUCTURA - POST
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
    async function Patch(url,body){ // ESTRUCTURA - PATCH
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
    async function Delete(ruta){ // ESTRUCTURA - GET
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
    return {Get,Post,Patch,Delete}
}