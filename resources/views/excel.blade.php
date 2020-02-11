
Name, Phone, Email, Adults, Children, Persons, Amount
@foreach($data as $details)
{{@$details->name}}, {{@$details->mobile}}, {{@$details->email}}, {{@$details->adults}}, {{@$details->children}}, {{@$details->persons}}, {{@$details->amount}}
@endforeach
