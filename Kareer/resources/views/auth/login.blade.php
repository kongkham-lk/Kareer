<x-layout>
    <x-page-header>Login</x-page-header>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.divider/>
        <x-forms.button type="submit">Log In</x-forms.button>
    </x-forms.form>
</x-layout>
