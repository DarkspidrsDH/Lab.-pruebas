/*
console.log("Conexion Main")
import { Get } from "./layout_mother.js"
window.Try = async function() {
    let ruta = '/public'
    let respuesta = await Get(ruta)
    console.log(respuesta)
}
Try()

function p(){
    console.log("Interno")
}
*/


//export async function Get(ruta) {
//}

console.log("Conexion Main")

import * as layoutMother from "./layout_mother.js";
Object.assign(window, layoutMother);


async function Try() {
    let ruta = '/public'
    let respuesta = await Get(ruta)
    console.log(respuesta.data)
}

//Try();



window.interna = async function(){
    console.log("Ejecutando")
    await Try()
}

/*
document.querySelector("#post").addEventListener("click",async function(){
    console.log("Click")
    Tupost()
});
*/

async function Tupost(){
    let ruta = '/public'
    let body = {
        "text":'asdasdasd'
    }
    let respuesta = await Post(ruta,body)
    console.log(respuesta)
}