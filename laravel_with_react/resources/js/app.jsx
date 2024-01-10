import ReactDOM from 'react-dom/client';        
import { BrowserRouter,Routes,Route } from 'react-router-dom';
import Header from './components/header';
import Tasks from './components/Tasks';
import Create from './components/tasks/create';
import Edit from './components/tasks/edit';

ReactDOM.createRoot(document.getElementById('app')).render(  
    <>   
    <BrowserRouter>
    <Header />
    <Routes>
    <Route path='/' exact element={<Tasks />}></Route>    
    <Route path='/create' exact element={<Create />}></Route>    
    <Route path='/edit/:todoId' exact element={<Edit />}></Route>    
    </Routes>
    </BrowserRouter>

    </>    
); 