<?php

namespace App\Policies;

use App\Models\abc;
use App\Models\taikhoan;
use Illuminate\Auth\Access\HandlesAuthorization;

class AbcPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(taikhoan $taikhoan)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @param  \App\Models\abc  $abc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(taikhoan $taikhoan, abc $abc)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(taikhoan $taikhoan)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @param  \App\Models\abc  $abc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(taikhoan $taikhoan, abc $abc)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @param  \App\Models\abc  $abc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(taikhoan $taikhoan, abc $abc)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @param  \App\Models\abc  $abc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(taikhoan $taikhoan, abc $abc)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @param  \App\Models\abc  $abc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(taikhoan $taikhoan, abc $abc)
    {
        //
    }
}
