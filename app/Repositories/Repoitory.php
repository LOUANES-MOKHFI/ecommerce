<?php 


namespace App\Repositories;
use App\Http\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class Repositoty implements RepositoryInterface
{

    protected $model;
    public function __construct(Model $model){

        $this->model = $model;
    }
    public function all(){
        return $this->model->pagiate(PAGINATE_COUNT);
    }

   public function create(array $data){
        return $this->model->create($data);
   }

   public function update(array $data, $id){
        $recode = $this->find($id);
        return $recode->create($data);
   }

   public function delete($id){
        return $this->model->destroy($id);
   }

   public function show($id){
        return $this->model->findOrFail($id);
   }

   public function getModel($model){
        return $this->model;
   }

   public function setModel($model){
        $this->model = $model;
        return $this;
   }

   public function with($relations)
   {
       return $this->model->with($relations);
   }
}