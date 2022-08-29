$(document).ready(function () {//"Document" é o que acessa as classes no HTML
  $('.banner').slick({
    slidesToShow: 1,//Quantidade de slides que aparece visualmente
    slidesToScroll: 1,//Quantidades de slides que irá aparecer
    autoplay: true,//Se é um autoplay se vai mudar sozinho, ai no caso tá com "true" verdadeiro
    autoplaySpeed: 2000,//Tempo de troca de slide, mede com milisegundos, ai no caso 2 segundo
    pausOnHover: false //Para trocar de slide quando o mause estiver em cima do slide
  });
});
$(document).ready(function () {//"Document" é o que acessa as classes no HTML
  $('.galeria').slick({
    slidesToShow: 6,//Quantidade de slides que aparece visualmente
    slidesToScroll: 1,//Quantidades de slides que irá aparecer
    autoplay: true,//Se é um autoplay se vai mudar sozinho, ai no caso tá com "true" verdadeiro
    autoplaySpeed: 1000,//Tempo de troca de slide, mede com milisegundos, ai no caso 1 segundo
    pausOnHover: false, //Para trocar de slide quando o mause estiver em cima do slide
    arrows: false, //Para remover as setas de passar o slide
    responsive: [
      {
        breakpoint: 1204,//tamanho de pixels, ai no caso é o de tablet, pego no site "slick js em responsive display", para fazer o responsivo
        settings: {
          slidesToShow: 4,//Quantidade de slides que aparece visualmente
          slidesToScroll: 1,//Quantidades de slides que irá aparecer
          autoplay: true,//Se é um autoplay se vai mudar sozinho, ai no caso tá com "true" verdadeiro
          autoplaySpeed: 1000,//Tempo de troca de slide, mede com milisegundos, ai no caso 1 segundo
          pausOnHover: false, //Para trocar de slide quando o mause estiver em cima do slide
          arrows: false
        }
      },
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 3,//Quantidade de slides que aparece visualmente
          slidesToScroll: 1,//Quantidades de slides que irá aparecer
          autoplay: true,//Se é um autoplay se vai mudar sozinho, ai no caso tá com "true" verdadeiro
          autoplaySpeed: 1000,//Tempo de troca de slide, mede com milisegundos, ai no caso 1 segundo
          pausOnHover: false, //Para trocar de slide quando o mause estiver em cima do slide
          arrows: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 6,//Quantidade de slides que aparece visualmente
          slidesToScroll: 1,//Quantidades de slides que irá aparecer
          autoplay: true,//Se é um autoplay se vai mudar sozinho, ai no caso tá com "true" verdadeiro
          autoplaySpeed: 1000,//Tempo de troca de slide, mede com milisegundos, ai no caso 1 segundo
          pausOnHover: false, //Para trocar de slide quando o mause estiver em cima do slide
          arrows: false
        }
      }
    ]
  });
});

////////////////////////////////////////////////////////////Botão Menu//////////////////////////////////////////////////////////////////////////
$(document) .ready(function(){
  $('.item-menu').click(function()
    {
      $('.item-menu').removeClass('ativo');
      $(this).addClass('ativo');
    });//Vai trocar a classe "ativo" de lugar, colocar essa classe no que eu cliquei no site, quando clicado é removido da classe "item-menu", e é colocado no outro conteiner que eu cliquei no site com esse mesma classe, nesse caso foi os botões menus, 
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////Menu Mobile/////////////////////////////////////////////////////////////////////////
document.querySelector(".abrirMenu").onclick = function(){
  document.documentElement.classList.add("menuAtivo");
}
document.querySelector(".fecharMenu").onclick = function(){
  document.documentElement.classList.remove("menuAtivo");
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////