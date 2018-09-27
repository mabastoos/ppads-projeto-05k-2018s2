import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';
import { BrowserRouter,Switch,Route } from 'react-router-dom';
import Menu from './Menu';

ReactDOM.render(<BrowserRouter>
    <Switch>
            <Route path="/" exact={true} component={App} />
            <Route path="/menu" component={Menu} />
        </Switch>


</ BrowserRouter>
    
    
    ,document.getElementById('root'));
registerServiceWorker();

<script></script>
