import DashboardView from "../views/DashboardView";
import ItemsView from "../views/ItemsView";
import IndustriesView from "../views/IndustriesView";


const route = [
    {
        path : '/admin/dashboard',
        name : 'dashboard',
        component : DashboardView,
        meta : {'pageTitle' : 'Dashboard'},
    },
    {
        path : '/admin/items',
        name : 'items',
        component : ItemsView,
        meta : {'pageTitle' : 'Items'},
    },
    {
        path : '/admin/industries',
        component : IndustriesView,
        meta : {'pageTitle' : 'Industries', dataUrl: 'api/industries'},
    },
    {
        path : '/admin/genres',
        component : IndustriesView,
        meta : {'pageTitle' : 'Genres'},
    },
    {
        path : '/admin/tags',
        component : IndustriesView,
        meta : {'pageTitle' : 'Tags'},
    },
];
export default route;