export function getEnderecoByCEP(cep){
      return fetch(`https://www.viacep.com.br/ws/${cep}/json/`)
      .then(response => response.json())
}
