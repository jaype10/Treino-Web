$(document).ready(() => {
  $('#documentacao').on('click', () => {
    //$('#pagina').load('documentacao.html')

    /*
    $.get('documentacao.html', data => {
      $('#pagina').html(data)
    })
    */

    $.post('documentacao.html', data => {
      $('#pagina').html(data)
    })
  })
  $('#suporte').on('click', () => {
    //$('#pagina').load('suporte.html')

    /*
    $.get('suporte.html', data => {
      $('#pagina').html(data)
    })
    */

    $.post('suporte.html', data => {
      $('#pagina').html(data)
    })
  })

  // Ajax
  $('#competencia').on('change', e => {

    let competencia = $(e.target).val()

    $.ajax({
      type: 'GET',
      url: 'app.php',
      data: `competencia=${competencia}`, // x-www-form-urlencoded
      dataType: 'json',
      success: dados => {
        // se o backend retornou um erro em JSON
        if (dados && dados.error) {
          console.error('API error:', dados.error)
          alert('Erro: ' + dados.error)
          return
        }

        $('#numeroVendas').html(dados.numeroVendas || 0)

        // formata total de vendas como moeda BRL
        const total = Number(dados.totalVendas) || 0
        $('#totalVendas').html(total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }))

        $('#clientesAtivos').html(dados.clientesAtivos || 0)
        $('#clientesInativos').html(dados.clientesInativos || 0)
        $('#totalReclamacoes').html(dados.totalReclamacoes || 0)
        $('#totalElogios').html(dados.totalElogios || 0)
        $('#totalSugestoes').html(dados.totalSugestoes || 0)
        $('#totalDespesas').html(dados.totalDespesas || 0)
        /*console.log(
          dados.numeroVendas,
          dados.totalVendas,
          dados.clientesAtivos,
          dados.clientesInativos
        )*/
      },
      error: erro => {
        console.error('Ajax error:', erro)
        alert('Erro ao consultar dados. Veja o console para mais detalhes.')
      }
    })

    // método, url, dados, sucesso, erro
  })

})
