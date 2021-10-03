import { LoginComponent } from './pages/login/login.component';
import { Ex1Component } from './pages/example/ex1/ex1.component';

export const routeRules = 
[
    {
        path: 'login',
        component: LoginComponent
    },
    {
        path: 'new',
        component: Ex1Component
    },
    { path: "", redirectTo: "/login", pathMatch: "full" },
 
    { path: "**", component: LoginComponent }

];