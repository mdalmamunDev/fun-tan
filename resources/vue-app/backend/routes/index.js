import DashboardView from "../views/DashboardView";
import ItemsView from "../views/ItemsView";
import IndustriesView from "../views/IndustriesView";
import GenresView from "../views/GenresView";
import TagsView from "../views/TagsView";
import ItemsFormView from "../views/ItemsFormView";


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
        path : '/admin/items/form/:id?',
        name : 'items',
        component : ItemsFormView,
        meta : {'pageTitle' : 'Item Form'},
    },
    {
        path : '/admin/industries',
        component : IndustriesView,
        meta : {'pageTitle' : 'Industries', dataUrl: 'api/industries'},
    },
    {
        path : '/admin/genres',
        component : GenresView,
        meta : {'pageTitle' : 'Genres', dataUrl: 'api/genres'},
    },
    {
        path : '/admin/tags',
        component : TagsView,
        meta : {'pageTitle' : 'Tags', dataUrl: 'api/tags'},
    },
];
export default route;