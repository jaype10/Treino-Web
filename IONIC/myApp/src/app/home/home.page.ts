import { Component } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
  standalone: false,
})
export class HomePage implements OnInit {

  public pesquisa: String = ""
  public resultado: String = ""
  public titulo: String = "Meu primeiro App"
  public imagemRandomica: String = "https://source.unplash.com/random/200x200"
  public imagemLocal: String = "../assets/icone-celular.png"

  constructor(private navegacao: NavController) { }

  ngOnInit() {
  }

  recuperar() {
    this.resultado = this.pesquisa
  }

  abrirBotoes() {
    this.navegacao.navigateForward('botoes')
  }

  abrirLista() {
    this.navegacao.navigateForward('lista')
  }

  public atualiza(): void {
    this.titulo = "Texto alterado"
  }

  public acao(): void {
    this.titulo = "Botão clicado"
  }

}
