<?php

namespace Clavel\Locations\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCcaasRequest extends FormRequest
{
    protected $validationRules = array();
    protected $locale;

    public function __construct()
    {
        parent::__construct();

        $this->locale = app()->getLocale();
        $this->validationRules['active'] = 'required';
        $this->validationRules['lang.'.$this->locale.'.name'] = 'required';
        $this->validationRules['country_id'] = 'required';
    }


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Si no tiene permisos para ver el listado lo echa.
        if (!auth()->user()->isAbleTo('admin-ccaas-create') || !auth()->user()->isAbleTo('admin-ccaas-update')) {
            return false;
        }

        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return array(
            'active.required' => trans('locations::ccaas/admin_lang.fields.active_required'),
        'lang.'.$this->locale.'.name.required' => trans('locations::ccaas/admin_lang.fields.name_required'),
        'country_id.required' => trans('locations::ccaas/admin_lang.fields.country_required')
        );
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->validationRules;
    }
}
