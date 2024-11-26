import DashboardComponent from "../components/DashboardComponent";


const route = [
    {
        path : '/admin/dashboard',
        name : 'dashboard',
        component : DashboardComponent,
        meta : {'pageTitle' : 'Dashboard'},
    },
    {
        path : '/admin/',
        component : DashboardComponent,
        meta : {'pageTitle' : 'Dashboard'},
    }
];
export default route;