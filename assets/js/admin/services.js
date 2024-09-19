console.log("Olá...");
const listServices = document.querySelector("#list-services")

fetch("http://localhost:8080/mvc-project-tarde/api/services/list-by-category/category/1",
    {
        method: "GET"
    }).then((response) => {
     response.json().then((services) => {
         //console.log(services);
         services.forEach((service) => {
             console.log(service.name, service.id);
             const newServiceLi = document.createElement("li");
             newServiceLi.innerHTML = `
             <span>ID: ${service.id}</span>
                <span>Nome: ${service.name}</span>
                <button class="edit-btn" data-id="1"><i class="fas fa-edit"></i> Editar</button>
                <button class="delete-btn" data-id="1"><i class="fas fa-trash"></i> Excluir</button>
             `;
             listServices.appendChild(newServiceLi);
         });
     });
});

listServices.addEventListener("click", (e) => {

    if(e.target.matches("button.edit-btn")){
        console.log("Clicando no botão edição");
        document.querySelector("#edit-modal").style.display = "flex";
    }

    if(e.target.matches("button.delete-btn")){
        console.log("Clicando no botão delete");
    }
});