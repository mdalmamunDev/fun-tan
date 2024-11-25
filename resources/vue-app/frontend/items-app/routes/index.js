import Home from "../views/HomeComponent";
import Movies from "../views/MoviesComponent";


const route = [
    {
        path : '/items/',
        name : 'home',
        component : Home,
        meta : {'pageTitle' : 'Home'},
    },
    {
        path : '/items/movies',
        name : 'movies',
        component : Movies,
        meta : {'pageTitle' : 'movies'},
    },
    {
        path : '/items/tv-series',
        name : 'tvSeries',
        component : Home,
        meta : {'pageTitle' : 'tv-series'},
    },
];
export default route;