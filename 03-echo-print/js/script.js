function hi() {
  alert('Bem-vindo ao PHP via JavaScript!');
}
function pedirNome() {
    const nome = prompt("Insira seu nome: ")
    if (nome) {
        alert("Olá " +nome + "!")
    } else {
        alert("Nome Vazio!")
    }
}