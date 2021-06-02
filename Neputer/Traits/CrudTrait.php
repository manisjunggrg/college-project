<?php


namespace Neputer\Traits;


trait CrudTrait
{

    public function createOrUpdate(array $data, $search , string $key = 'title')
    {
        return $this->model->updateOrCreate(
            [ $key => $search ],
            $data
        );
    }

    public function find( $property )
    {
        return $this->model
            ->where('id' , $property)
            ->orWhere('slug' ,$property)
            ->firstOrFail();
    }

    public function new( array $data )
    {
        return $this->model->create( $data );
    }

    public function updates(array $data, $model)
    {
        $instance = $model;
        $model->update( $data );

        return $instance;
    }

    public function save( $key = 'name', array $data = [])
    {
        return $this->model->updateOrCreate(
            [ "{$key}" => $data[$key]],
            $data
        );
    }

    public function get( $paginate = null )
    {
        $that = $this->model;

        if(is_null($paginate))
        {
            return $that->latest()
                ->get();
        }
        return $that->latest()->paginate( $paginate );
    }

    public function destroy( $model )
    {
        $model->delete();

        return true;
    }

    public function pluckEntity( $prepend = null, $append = null, string $key = 'name' )
    {
        $model = $this->model->pluck($key, 'id');
        if (is_null($append))
            return $model;
        return $model->prepend( $prepend, 0 );
    }

    public function query()
    {
        return $this->model->query();
    }

}
