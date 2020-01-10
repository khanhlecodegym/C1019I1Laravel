<ul class="nav nav1">
    <li class="nav-item">
      <a class="nav-link active" href="/">Index</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('students.index') }}">Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('students.create') }}">Create</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('products.index',['amount' => 20]) }}">Product</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customers.index') }}">Customer</a>
      </li>
  </ul>
