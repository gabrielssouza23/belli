import { getBackendUrlApi, showToast } from "../_shared/functions.js";

// Função para listar os medicamentos do usuário
const loadMedicamentosByUser = (userId) => {
    fetch(getBackendUrlApi("medicamentos/medicamentos/user"), {
        method: "POST", // Alterado para POST
        headers: {
            "Content-Type": "application/json" // Cabeçalho para indicar que o corpo está em JSON
        },
        body: JSON.stringify({ id_usuario: userId }) // Enviando o userId no corpo da requisição
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

        // Verifica se há medicamentos retornados
        if (medicamentos.length === 0) {
            contentDiv.innerHTML = "<p>Nenhum medicamento encontrado para este usuário.</p>";
            return;
        }

        // Adiciona um contêiner para os medicamentos
        const medicineList = document.createElement('div');
        medicineList.classList.add('medicine-list');

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
            medicineList.innerHTML += medicamentoHTML;
        });

        // Adiciona a lista de medicamentos ao contêiner principal
        contentDiv.appendChild(medicineList);
    })
    .catch(error => {
        console.error("Erro ao carregar medicamentos do usuário:", error);
        showToast("Erro ao carregar medicamentos do usuário.");
    });
};

// Carrega os medicamentos do usuário quando a página é carregada
document.addEventListener("DOMContentLoaded", () => {
    const userAuth = JSON.parse(localStorage.getItem("userAuth"));
    const userId = userAuth ? parseInt(userAuth.id, 10) : null; // Garantir que seja um número inteiro

    if (userId) {
        loadMedicamentosByUser(userId);
    } else {
        showToast("Usuário não autenticado.");
    }
});
