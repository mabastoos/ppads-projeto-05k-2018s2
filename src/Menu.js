import React, { Component } from 'react';
import './Menu.css';
import porcao1 from './imagens/porcao1.jpg';



class Menu extends Component {
    render() {
        

      return (
  
       
        
         
        
        <div className='menu'>

        <h2> Cardápio </h2>

        <img src={porcao1}/><input type="button" name="cal" onclick="add()" value="Adicionar ao Carrinho."/>

        </div>
   
      );
  
      
    }
  }
  
  export default Menu;
  