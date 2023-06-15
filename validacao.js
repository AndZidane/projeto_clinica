// Obtém referência para o formulário
const formulario = document.getElementById('formulario');

// Obtém referência para o botão de envio
const enviarBtn = document.getElementById('enviar');

// Adiciona o evento de clique ao botão de envio
enviarBtn.addEventListener('click', function(event) {
  // Impede o envio padrão do formulário
  event.preventDefault();

  // Validação do campo "Nome completo"
  const nomeInput = document.querySelector('.id_nome');
  const nome = nomeInput.value.trim();
  if (nome === '') {
    alert('Por favor, preencha o campo "Nome completo".');
    return;
  }

  // Validação do campo "Filiação (pai/mãe)"
  const filiacaoInput = document.querySelector('.id_filiacao');
  const filiacao = filiacaoInput.value.trim();
  if (filiacao === '') {
    alert('Por favor, preencha o campo "Filiação (pai/mãe)".');
    return;
  }

  // Validação do campo "Data de nascimento"
  const dtNascInput = document.querySelector('.id_dt_nasc');
  const dtNasc = dtNascInput.value.trim();
  if (dtNasc === '') {
    alert('Por favor, preencha o campo "Data de nascimento".');
    return;
  }

  // Validação do campo "RG"
  const rgInput = document.querySelector('.id_rg');
  const rg = rgInput.value.trim();
  if (rg === '') {
    alert('Por favor, preencha o campo "RG".');
    return;
  }

  // Validação do campo "Sexo"
  const sexoInput = document.querySelector('.id_sexo');
  if (!sexoInput.checked) {
    alert('Por favor, selecione o campo "Sexo".');
    return;
  }

  // Validação do campo "E-mail"
  const emailInput = document.querySelector('.id_email');
  const email = emailInput.value.trim();
  if (email === '') {
    alert('Por favor, preencha o campo "E-mail".');
    return;
  }

  // Validação do campo "Telefone"
  const telefoneInput = document.querySelector('.id_telefone');
  const telefone = telefoneInput.value.trim();
  if (telefone === '') {
    alert('Por favor, preencha o campo "Telefone".');
    return;
  }

  // Se todas as validações passaram, você pode prosseguir com o envio do formulário
  formulario.submit();
});
