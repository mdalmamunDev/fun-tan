import DashboardView from "../views/DashboardView";
import ItemsView from "../views/ItemsView";


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
        path : '/admin/',
        component : DashboardView,
        meta : {'pageTitle' : 'Dashboard'},
    }
];
export default route;