<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tours Controller
 *
 * @property \App\Model\Table\ToursTable $Tours
 *
 * @method \App\Model\Entity\Tour[] paginate($object = null, array $settings = [])
 */
class ToursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tours', 'Typetours']
        ];
        $tours = $this->paginate($this->Tours);

        $this->set(compact('tours'));
        $this->set('_serialize', ['tours']);
    }

    /**
     * View method
     *
     * @param string|null $id Tour id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tour = $this->Tours->get($id, [
            'contain' => ['Tours', 'Typetours']
        ]);

        $this->set('tour', $tour);
        $this->set('_serialize', ['tour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tour = $this->Tours->newEntity();
        if ($this->request->is('post')) {
            $tour = $this->Tours->patchEntity($tour, $this->request->getData());
            if ($this->Tours->save($tour)) {
                $this->Flash->success(__('The tour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tour could not be saved. Please, try again.'));
        }
        $tours = $this->Tours->Tours->find('list', ['limit' => 200]);
        $typetours = $this->Tours->Typetours->find('list', ['limit' => 200]);
        $this->set(compact('tour', 'tours', 'typetours'));
        $this->set('_serialize', ['tour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tour = $this->Tours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tour = $this->Tours->patchEntity($tour, $this->request->getData());
            if ($this->Tours->save($tour)) {
                $this->Flash->success(__('The tour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tour could not be saved. Please, try again.'));
        }
        $tours = $this->Tours->Tours->find('list', ['limit' => 200]);
        $typetours = $this->Tours->Typetours->find('list', ['limit' => 200]);
        $this->set(compact('tour', 'tours', 'typetours'));
        $this->set('_serialize', ['tour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tour = $this->Tours->get($id);
        if ($this->Tours->delete($tour)) {
            $this->Flash->success(__('The tour has been deleted.'));
        } else {
            $this->Flash->error(__('The tour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
