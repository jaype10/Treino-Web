import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
  standalone: false,
})
export class HomePage {

  public resultado: String = "Resultado"

  calcular() {
    // Validar se os campos estão preenchidos
    if (this.precoAlcool && this.precoGasolina) {
      var pAlcool = parseFloat(this.precoAlcool)
      var pGasolina = parseFloat(this.precoGasolina)

      var res = pAlcool / pGasolina
      if (res >= 0.7) {
        this.resultado = "Melhor usar Gasolina"
      } else {
        this.resultado = "Melhor usar Álcool"
      }
    } else {
      this.resultado = "Preencha corretamente os campos"
    }
  }

}
