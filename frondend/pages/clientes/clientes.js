import { getClientes } from "./API.js"

console.log("aaa");
addEventListener('DOMContentLoaded', ()=>{
    cargarClientes()
})

async function cargarClientes(){
    const clientes = await getClientes();
    const tablaClientes =document.querySelector('#datosClientes')
    console.log(clientes );
    clientes.forEach(element => {
        tablaClientes.innerHTML+=`
                    <tr>
                        <th scope="row">${element.id_constructora}</th>
                        <td>${element.nombre_constructora}</td>
                        <td>${element.nit_constructora}</td>
                        <td>${element.nombre_representante} Repr.</td>
                        <td>${element.email.contacto}</td>
                        <td>${element.telefono_contacto}</td>
                      </tr>
                      
        
        `
        
    });
}