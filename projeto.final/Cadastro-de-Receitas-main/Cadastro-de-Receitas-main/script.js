// Função para setar categorias no input do cadastro

function selectItem(item) {
    document.getElementById("categoria").value = item;
}


//Função para cadastrar
function insere(conteudo) {   
    let nom = document.forms["cadastrar"]["nomeReceita"].value;
    let ing = document.forms["cadastrar"]["ingreReceita"].value;
    let prep = document.forms["cadastrar"]["prepReceita"].value;
    let cat = document.forms["cadastrar"]["categoria"].value;

    let tabela = window.document.querySelector("#inserirTabela");    

    const tr = document.createElement('tr')

    const nomTd = document.createElement('td')
    nomTd.textContent = nom;

    const ingTd = document.createElement('td')
    ingTd.textContent = ing;

    const prepTd = document.createElement('td')
    prepTd.textContent = prep;

    const catTd = document.createElement('td')
    catTd.textContent = cat;
 
    tabela.appendChild(tr);
    tr.appendChild(nomTd);
    tr.appendChild(ingTd);
    tr.appendChild(prepTd);
    tr.appendChild(catTd);

};