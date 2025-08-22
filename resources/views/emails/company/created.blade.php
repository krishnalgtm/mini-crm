@component('mail::message')
# New Company Created 🎉

A new company has been added to the system.

**Name:** {{ $company->name }}  
**Email:** {{ $company->email ?? 'N/A' }}  
**Website:** {{ $company->website ?? 'N/A' }}

@component('mail::button', ['url' => route('companies.show', $company->id)])
View Company
@endcomponent

Thanks,  
{{ config('app.name') }}
@endcomponent
