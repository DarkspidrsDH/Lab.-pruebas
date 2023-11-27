console.log("Conectado")

import { peticiones } from "./modulos/modulos.js";
const { Get,Post,Patch,Delete } = await peticiones();


async function peticion(){
    let ruta = '/public'
    let respuesta = await Get(ruta)
    console.log(respuesta)
}


