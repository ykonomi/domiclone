// Code generated by goa v3.10.2, DO NOT EDIT.
//
// calc HTTP server types
//
// Command:
// $ goa gen github.com/comi91262/domilike

package server

import (
	calc "github.com/comi91262/domilike/gen/calc"
)

// NewAddPayload builds a calc service add endpoint payload.
func NewAddPayload(a int, b int) *calc.AddPayload {
	v := &calc.AddPayload{}
	v.A = a
	v.B = b

	return v
}
