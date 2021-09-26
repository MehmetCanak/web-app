import { LoginComponent } from './pages/login/login.component';

export const routeRules = 
[
    {
        path: 'login',
        component: LoginComponent
    },
    { path: "", redirectTo: "/login", pathMatch: "full" },
 
    { path: "**", component: LoginComponent }

];