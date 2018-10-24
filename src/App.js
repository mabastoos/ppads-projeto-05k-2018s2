import React, { Component } from 'react';
import background from './imagens/back.jpg';
import './App.css';
/* import ResponsiveMenu from 'react-responsive-navbar'; */
import {Link} from 'react-router-dom';

class App extends Component {
  render() {
    return (



<section id="page">

  <header>Queue</header>
  <nav id="nav">
    <ul id="one">Cardápio
      <li><Link to="/menu">Entradas</Link></li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>
    <ul id="two">Comanda
      
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>
    <ul id="three">Sobre o restaurante
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>    
  </nav>
  <main>Main</main>
  
</section>

    

    
       


    

      
    );

    
  }
}

export default App;
