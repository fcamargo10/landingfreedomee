<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Newsletters Controller
 *
 * @property \App\Model\Table\NewslettersTable $Newsletters
 */
class NewslettersController extends AppController
{
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $newsletter = $this->Newsletters->newEmptyEntity();
        if ($this->request->is('post')) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('Cadastro realizado com sucesso.'));

                return $this->redirect('/');
            }
            $this->Flash->error(__('Falha ao realizar cadastro.'));
        }
        $this->viewBuilder()->setLayout('bootstrap');
        $this->set(compact('newsletter'));
    }
}
