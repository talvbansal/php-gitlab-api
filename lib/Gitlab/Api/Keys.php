<?php namespace Gitlab\Api;

class Keys extends AbstractApi
{
    /**
     * @param int $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->get('/projects/'.$this->encodePath($id).'/deploy_keys');
    }
}
