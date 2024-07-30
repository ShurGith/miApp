document.addEventListener('DOMContentLoaded',()=>{
    const tar = document.querySelector('#eventual')
    const selector = document.querySelector("#files_select");
    const imgSrc = tar.src;
    selector.addEventListener('change',function(){
        tar.src= imgSrc;
        if(this.value)
            tar.src='../../images/productos/'+this.value
    })
})
