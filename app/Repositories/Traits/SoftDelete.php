<?php

final class SoftDelete
{
    public function allWithTrashed()
    {
        return $this->model->withTrashed()->get();
    }

    public function deleteOrRestore($id)
    {
        if ($this->trashed($object = $this->oneWithTrashed($id))) {
            return $this->restore($object);
        }
        return $this->delete($id);
    }

    public function oneWithTrashed($id)
    {
        return $this->model->withTrashed()->findOrFail($id);
    }

    public function restore($object)
    {
        return $object->restore();
    }

    public function trashed($object)
    {
        return $object->trashed();
    }
}
