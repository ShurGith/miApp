document.addEventListener('DOMContentLoaded',()=>{
    const tar = document.querySelector('#eventual')
    const selector = document.querySelector("#files_select");
    const btnModal = document.querySelector('#btnModal')
    const btnEncontrado= document.querySelector('#btnEncontrado')
    const divImgs = document.querySelector('#secImagenes')
    const Url = location.href
    const imgSrc = tar.src;
    selector.addEventListener('change',function(){
        tar.src= imgSrc;
        if(this.value)
            tar.src='../../images/productos/'+this.value
    })
    //console.log(Url)
    // if(Url.includes('categoria/index'))
    //     divImgs.classList.remove('flex-col')

})
