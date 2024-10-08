import { getBackendUrlApi, showToast } from "./../_shared/functions.js";

// Função para listar todos os medicamentos
const loadMedicamentos = () => {
    fetch(getBackendUrlApi("medicamentos/medicamentos"), {
        method: "GET"
    })
    .then(response => response.json())
    .then(data => {
        if (data.type === "error") {
            showToast(data.message);
            return;
        }

        const medicamentos = data.medicamentos;
        const contentDiv = document.querySelector(".content");

        // Limpa o conteúdo existente
        contentDiv.innerHTML = "";

        // Itera sobre os medicamentos e os insere na página
        medicamentos.forEach(medicamento => {
            const medicamentoHTML = `
                <div class="medicine-card">
                    <h3>${medicamento.nome}</h3>
                    <p>${medicamento.descricao}</p>
                    <span class="tag tarja-${medicamento.tarja.toLowerCase()}">Tarja ${medicamento.tarja}</span>
                    <p><strong>Quantidade:</strong> ${medicamento.quantidade}</p>
                </div>
            `;
            contentDiv.innerHTML += medicamentoHTML;
        });
    })
    .catch(error => {
        console.error("Erro ao carregar medicamentos:", error);
        showToast("Erro ao carregar medicamentos.");
    });
};

// Carrega os medicamentos quando a página é carregada
document.addEventListener("DOMContentLoaded", loadMedicamentos);
