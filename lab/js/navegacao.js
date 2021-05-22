(function () {
    function navegarViaAjax(hash) {
        if (!hash) return

        const link = document.querySelector(`[wm-link='${hash}']`)
        if(!link) return

        const destino = document.querySelector('[wm-link-destino]')

        const url = hash.substring(1)
        fetch(url)
            .then(resp => resp.text())
            .then(html => {
                destino.innerHTML = html
                const resultado = html.match(html.match(/\<script\>([\s\S]*)\<\/script\>/))
                if(resultado && resultado.length >= 2){ // Se o resultado estiver valido E se resultado for maior ou igual a 2 aí sim é seguro imaginar que o script que terei no eval é possível de armazenar
                eval(resultado[1]) // Letra s e S com "*" quer dizer que pega todos os caracteres tanto minúsculo quanto maiúsculo  
                } // Implementei o eval para que o JavaScript passe a funcionar Tooltip chamando uma função, sem ele o botão não apareceria a msg
            })      
    }

    function configurarLinks() {
        document.querySelectorAll('[wm-link]')
            .forEach(link => {
                link.href = link.attributes['wm-link'].value
            })
    }

    function navegacaoInicial() {
        if (location.hash) {
            navegarViaAjax(location.hash)
        } else {
            const primeiroLink = document.querySelector('[wm-link]')
            navegarViaAjax(primeiroLink.hash)
        }
    }

    window.onhashchange = e => navegarViaAjax(location.hash)
    
    configurarLinks()
    navegacaoInicial()
})()