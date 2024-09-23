import Home from "../views/HomeComponent";
import Movies from "../views/MoviesComponent";


const route = [
    {
        path : '/',
        name : 'home',
        component : Home,
        meta : {'pageTitle' : 'Home'},
    },
    {
        path : '/movies',
        name : 'movies',
        component : Movies,
        meta : {'pageTitle' : 'Home'},
    },
    {
        path : '/tv-series',
        name : 'home',
        component : Home,
        meta : {'pageTitle' : 'Home'},
    },
];
export default route;