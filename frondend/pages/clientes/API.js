const urlClientes = "http://localhost/SkylAb-159/vv/clase2/backend/controler.php?op=GetAll"

export const getClientes = async ()=>{
    

    try {
        const clientes = await fetch(urlClientes);
    const datosClientes = clientes.json();
    return datosClientes
    } catch (error) {
        console.log(error); 
    }
}