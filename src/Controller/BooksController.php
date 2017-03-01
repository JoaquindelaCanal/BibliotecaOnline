<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Books Controller
 *
 * @property \App\Model\Table\BooksTable $Books
 */
class BooksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */

    function beforeFilter(\Cake\Event\Event $event )
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'download']);
    }

    public function index()
    {
        $books = $this->paginate($this->Books);

        $this->set(compact('books'));
        $this->set('_serialize', ['books']);
    }

    public function adminbooks()
    {
        $books = $this->paginate($this->Books);
        $this->set('books', $books);
    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => []
        ]);

        $this->set('book', $book);
        $this->set('_serialize', ['book']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $book = $this->Books->newEntity();
        if ($this->request->is('post')) 
        {
            if(isset($_FILES["UploadBook"]["name"]))
            {
                $hash = $book->id * 5; //Cada libro va a ser unico
                //$target_dir = "pdf/"; //Donde se van a guardar los pdf
                $target_file = "pdf/" . basename($_FILES["UploadBook"]["name"], ".pdf") . $hash . ".pdf"; //La ruta del pdf
                $book = $this->Books->patchEntity($book, $this->request->data);
                $book->path = $target_file;
                if ($this->Books->save($book)) 
                {
                    move_uploaded_file($_FILES["UploadBook"]["tmp_name"], $target_file);
                    $this->Flash->success('El libro ha sido agregado correctamente.');
                    return $this->redirect(['action' => 'index']);
                }
                else{
                    $this->Flash->error('No se pudo crear al user.');
                }

            }
            else{
                $this->Flash->error('No se pudo cargar el PDF.');
            }

        }

        $this->set(compact('book'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Book id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $book = $this->Books->patchEntity($book, $this->request->data);
            if ($this->Books->save($book)) {
                $this->Flash->success('El libro se edito correctamente');

                return $this->redirect(['action' => 'adminbooks']);
            }
            $this->Flash->error('No se pudo guardar el libro, por favor intente nuevamente.');
        }
        $this->set(compact('book'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Book id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $book = $this->Books->get($id);
        if ($this->Books->delete($book)) {
            $this->Flash->success('El libro se ha eliminado.');
        } else {
            $this->Flash->error('Ocurrio un error, el libro no pudo ser eliminado.');
        }

        return $this->redirect(['action' => 'adminbooks']);
    }

    public function download($id = null)
    {
        $this->request->allowMethod(['post', 'download']);
        $book = $this->Books->get($id);   
        if (file_exists($book->path)) 
        {
            header('content-Disposition: attachment; filename = '.$book->path.'');
            header('content-type:appliction/octent-strem');
            header('content-length='.filesize($book->path));
            readfile($book->path);
        }
        else
        {
            $this->Flash->error('El link de descarga no funciona.');
        }
        
      return $this->redirect(['action' => 'index']);          
    }

    public function isAuthorized()
    {
        if($this->Auth->user())
        {
            return true;
        }
        return false;
    }


}
