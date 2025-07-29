<x-layout>
    <x-page-header>Create Job Posting</x-page-header>
    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Job Title" name="title" placeholder="Web Developer" required/>
        <x-forms.input label="Location" name="location" placeholder="Vancouver, BC" required/>
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 Per Year"  required/>
        <x-forms.select label="Role Type" name="type" required>
            <option value="" disabled selected> -- Select Role Type -- </option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
            <option value="Contract">Contract</option>
            <option value="Internship / Co-op">Internship / Co-op</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https://www.example.com/career/role-needed" required/>
        <x-forms.checkbox label="Feature" subLabel="Feature (Cost Extra)" name="featured"/>
        <x-forms.divider/>
        <x-forms.textarea label="Job Description" name="description" placeholder="About the job and minimum qualifications..." required/>
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="ML, Laravel, Education..."/>
        <x-forms.button-submit type="submit">Post Job</x-forms.button-submit>
    </x-forms.form>
</x-layout>
