const APIURL ="https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=04c35731a5ee918f014970082a0088b1&page=1";
const IMGPATH = "https://image.tmdb.org/t/p/w1280";
const SEARCHAPI ="https://api.themoviedb.org/3/search/movie?&api_key=04c35731a5ee918f014970082a0088b1&query=";
const main = document.getElementById('main');
const form = document.getElementById('form');
const search =document.getElementById('search');
    var i=1
const APIUR ="https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=04c35731a5ee918f014970082a0088b1&page=";
getMovies(APIURL)

function getMovies(url){
    fetch(url).then(res => res.json()).then(data =>{

       showMovies(data.results);
       console.log(data.results);
    })
}
function showMovies(data){
    main.innerHTML =''

    data.forEach(movie => {
        const {title,overview,poster_path,vote_average}=movie;
        const movieE1 =document.createElement('div');
        movieE1.classList.add('movie');
        movieE1.innerHTML =`
                <img src="${IMGPATH+poster_path}" alt="${title}">
                <div class="movie-info">
                    <h3>${title}</h3>
                    <span class="${color(vote_average)}">${vote_average}</span>
                </div>
                
                 <div class="overview">

                     <h3>Overview</h3>
                    ${overview}
                  
        
            `
            main.appendChild(movieE1);
    })
}

function color(vote){
    if(vote >=8){
        return 'green'

    }else if(vote >=5){

        return 'orange'
    }else

    return 'red'

}
search.addEventListener('keyup',(e) =>{
    e.preventDefault();
    const searchTerm =search.value;
    if(searchTerm){
        getMovies(SEARCHAPI+searchTerm)
    }else{
        getMovies(APIURL);
    }
})
window.onscroll = function(){
    if((document.body.scrollHeight)<=(window.innerHeight+window.scrollY)){
        i++
getMovies(APIUR+i)

    }
}
