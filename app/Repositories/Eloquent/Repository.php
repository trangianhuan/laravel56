<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;
//use App\Repositories\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use Validator;

/**
 * Class Repository
 * @package App\Repositories\Eloquent
 */
abstract class Repository implements RepositoryInterface {

    /**
     * @var App
     */
    private $app;

    /**
     * @var
     */
    protected $model;

    public $roles;

    public $messages;

    /**
     * @param App $app
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
        $this->initFields();
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract function model();

    abstract function initFields();

    /**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws RepositoryException
     */
    public function makeModel() {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model->newQuery();
    }

    /**
     * [validate fields input]
     * @param  [array] $params [description]
     * @return [type]         [description]
     */
    public function validateFields(array $fields) {
        $validator = Validator::make($fields, $this->roles, $this->messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()->all()]);
        }

        return ;
    }

    public function search($query, $keyword, $searchColumns, $order, $limit, $page)
    {
        if (empty($query)) {
            $query = $this->model;
        }

        if ($keyword) {
            $query->where(function ($currentQuery) use ($keyword, $searchColumns) {
                foreach ($searchColumns as $col) {
                    $currentQuery->orWhere($col, 'like', "%$keyword%");
                }
            });
        }

        if (!empty($order)) {
            $query->orderBy($order['column'], $order['dir']);
        }

        return $query->paginate($limit, ['*'], 'page', $page);
    }
}